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
 * @author Cay Horstmann
 */

package myproject.part3;

import info.gridworld.actor.Actor;
import info.gridworld.actor.ActorWorld;
import info.gridworld.grid.Location;
import info.gridworld.actor.Bug;
//import info.gridworld.actor.Critter;
import info.gridworld.actor.Rock;
import info.gridworld.actor.Flower;
import info.gridworld.grid.SparseBoundedGrid;
/**
 * This class runs a world with additional grid choices.
 */
public class SparseGridRunner
{
    public static void main(String[] args)
    {
        ActorWorld world = new ActorWorld();
        world.addGridClass("info.gridworld.grid.SparseBoundedGrid");
        world.addGridClass("info.gridworld.grid.SparseBoundedGridHash");
        world.addGridClass("info.gridworld.grid.ResizableGrid");
        //world.addGridClass("SparseBoundedGrid2");
        //world.addGridClass("SparseBoundedGrid3");
        //world.addGridClass("UnboundedGrid2");
       // world.add(new Location(2, 2), new Critter());
        world.add(new Bug());
        world.show();
    }
}
