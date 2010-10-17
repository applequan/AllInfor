/* 
 * AP(r) Computer Science GridWorld Case Study:
 * Copyright(c) 2005-2006 Cay S. Horstmann (http://horstmann.com)
 *
 * This code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @author DengQuanWen
 */
package info.gridworld.actor;
import info.gridworld.actor.Actor;
import info.gridworld.actor.Critter;
import info.gridworld.grid.Grid;
import info.gridworld.grid.Location;

import java.awt.Color;
import java.util.ArrayList;

/**
 * Create a class KingCrab that extends CrabCritter. A KingCrab gets
*the actors to be processed in the same way a CrabCritter does. A
*KingCrab causes each actor that it processes to move one location further away
*from the KingCrab. If the actor cannot move away, the KingCrab
*removes it from the grid. When the KingCrab has completed processing the
*actors, it moves like a CrabCritter.
 */
public class KingCrab extends CrabCritter
{
	public void processActors(ArrayList<Actor> actors)
    {
        for (Actor a : actors)
        {
        	Grid gr = getGrid();
        	int dir = getLocation().getDirectionToward(a.getLocation());//Get the direction to the actor.
        	Location dist = a.getLocation().getAdjacentLocation(dir);
        	if (gr.isValid(dist) && gr.get(dist) == null) 
        		a.moveTo(dist);//move further
        	else a.removeSelfFromGrid();
        	//remove self
        }
    }
}








