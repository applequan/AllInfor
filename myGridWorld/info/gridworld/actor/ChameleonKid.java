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
 * @author Chris Nevison
 * @author Barbara Cloud Wells
 * @author Cay Horstmann
 */
package info.gridworld.actor;
import info.gridworld.actor.Actor;
import info.gridworld.actor.Critter;
import info.gridworld.grid.Location;


import java.util.ArrayList;
//import java.awt.Color;
/**
 * A <code>ChameleonCritter</code> takes on the color of neighboring actors as
 * it moves through the grid. <br />
 * The implementation of this class is testable on the AP CS A and AB exams.
 */
public class ChameleonKid extends ChameleonCritter
{
	public ArrayList<Actor> getActors()
    {int[] dirs = { Location.AHEAD, Location.HALF_CIRCLE }; 
    ArrayList<Location> locs = new ArrayList<Location>();
    ArrayList<Actor> actors = new ArrayList<Actor>();
    Location tmploc=null;
    
    for (int d:dirs)	    
		{tmploc=this.getLocation().getAdjacentLocation(d);
		
		     if (getGrid().isValid(tmploc))
	                locs.add(tmploc);
	    }
    for ( Location tmploc2:locs)   
	    {
	            Actor all = getGrid().get(tmploc2);
	            if (all != null)
	                actors.add(all);
	    }
	        return actors;	     
    }
	
	
}
    